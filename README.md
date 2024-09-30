# ChatGpt API Kullanımı - LARAVEL

## BİLGİLENDİRME

Herkese merhaba. Bu projede **ChatGPT API** kullanarak web sitemizde hem chat gpt ile yazışma botunu kullanacağız, hem de Open AI firmasına ait yazılım olan DALL-E 3 ile footğraf üretme servislerini kullanacağız.

## ADIM 1: OpenAI Developer hesabı oluşturma

OpenAI develoepr sitesinden bir hesap oluşturuyoruz ve billing alanından hesabımıza ihtiyaç duyulan miktar kadar bakiye yüklüyoruz.

## ADIM 2

Projeyi tarafınıza çektikten sonra composer kurulumunu gerçekleştiriyoruz.

```bash
composer install
```

## ADIM 3

.env dosyasına belirtilen kodu eklemeniz gerekmekte.

```bash
CHAT_GPT_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```
buradaki CHAT_GPT_KEY kodunu developer paneliniz içerisinde "Your Profile" alanında bulabilirsiniz hiç kod üretilmediyse "Create New Secret Key" butonundan bu kodu üretip bu alana yapıştırabilirsiniz. 

Bunlar haricinde eklemeniz gereken bir alan yoktur kullanmak istediğiniz servisi Controlelr içerisindeki "model" => 'gpt-4o-mini', alanından istediğiniz ChatGpt modellerini seçerek kullanabilirsiniz. Aynı durum DALL-E metodu için de geçerlidir.
