# Authentification
Use Session approach - Use PHP Sessions

Other Measurements: Track the IP the user logged in with. Then check it on every request. If it changed, delete Session and let the user log in again.

Same goes for the „User-Agent“
Same with „Accept-Language“ 

## Infos
https://stackoverflow.com/questions/10165424/how-secure-are-php-sessions