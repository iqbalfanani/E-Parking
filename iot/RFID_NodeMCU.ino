#include <ESP8266WiFi.h>     //Esp library
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <SPI.h>
#include <MFRC522.h>        //RFID library

#define SS_PIN D4 //RX slave select
#define RST_PIN D3
#define RedLed D1
#define GreenLed D2
#define BuzzerPin D8

MFRC522 mfrc522(SS_PIN, RST_PIN); // MFRC522 instansiasi.

/* Set these to your desired credentials. */
const char *ssid = "Myrepublic_c1209071";  //WIFI SETTINGS
const char *password = "holdmydick";

//Web/Server
const char *host = "192.168.1.4";   //IP server

String getData , Link;
String CardID = "";

void setup() {
  delay(1000);
  Serial.begin(115200);
  SPI.begin();
  mfrc522.PCD_Init();

  WiFi.mode(WIFI_OFF);
  delay(1000);
  WiFi.mode(WIFI_STA);

  WiFi.begin(ssid, password);     //Connect to WiFi
  Serial.println("");

  Serial.print("Connecting to ");
  Serial.print(ssid);
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  //If connection success show IP address
  Serial.println("");
  Serial.println("Connected");
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to ESP

  pinMode(RedLed, OUTPUT);
  pinMode(GreenLed, OUTPUT);
  pinMode(BuzzerPin, OUTPUT);

}

void loop() {
  if (WiFi.status() != WL_CONNECTED) {
    WiFi.disconnect();
    WiFi.mode(WIFI_STA);
    Serial.print("Reconnecting to ");
    Serial.println(ssid);
    WiFi.begin(ssid, password);

    while (WiFi.status() != WL_CONNECTED) {
      delay(500);
      Serial.print(".");
    }
    Serial.println("");
    Serial.println("Connected");
    Serial.print("IP address: ");
    Serial.println(WiFi.localIP());  //IP address assigned to ESP
  }

  //new card
  if ( ! mfrc522.PICC_IsNewCardPresent()) {
    return;
  }
  // Select cards
  if ( ! mfrc522.PICC_ReadCardSerial()) {
    return;
  }

  for (byte i = 0; i < mfrc522.uid.size; i++) {
    CardID += mfrc522.uid.uidByte[i];
  }

  HTTPClient http;

  //GET Data
  getData = "?CardID=" + CardID;
  Link = "http://192.168.1.4/nodemcu/postdemo.php" + getData;

  http.begin(Link);

  int httpCode = http.GET();            //Send request
  delay(10);
  String payload = http.getString();    //Get response payload

  Serial.println(httpCode);   //Print HTTP code
  Serial.println(payload);    //Print request response payload
  Serial.println(CardID);     //Print Card ID

  if (payload == "login") {
    digitalWrite(RedLed, HIGH);
    Serial.println("Ren on");
    for (byte i = 0; i <= 1; i++) {
      digitalWrite(BuzzerPin, HIGH);
      delay(100);
      digitalWrite(BuzzerPin, LOW);
      delay(100);
    }

    delay(500);  //Post Data every 5 seconds
  }
  else if (payload == "logout") {
    digitalWrite(GreenLed, HIGH);
    Serial.println("Green on");
    for (byte i = 1; i <= 1; i++) {
      digitalWrite(BuzzerPin, HIGH);
      delay(100);
      digitalWrite(BuzzerPin, LOW);
      delay(100);
    }
    delay(500);  //Post Data every 5 seconds
  }
  else if (payload == "succesful" || payload == "CardAvailable") {
    digitalWrite(GreenLed, HIGH);
    digitalWrite(RedLed, HIGH);
    delay(500);
  }
  delay(500);

  CardID = "";
  getData = "";
  Link = "";
  http.end();  //Close connection

  digitalWrite(RedLed, LOW);
  digitalWrite(GreenLed, LOW);
}
//=======================================================================
