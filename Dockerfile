#na čem stavíme celou aplikaci - tedy php který má již webový server apache
FROM php:7.4-apache    

#povolení rozšíření php - umožní pak připojení k DB pomocí php, co chceme nad rámec základního balíčku
RUN docker-php-ext-install mysqli  






#Zápis bez použití docker compose 
#FROM php:7.4-apache   (na čem stavíme aplikaci)
#COPY ./src:/var/www/html  (Musíme nakopírovat data/aby nebyl image php prázdný/odkaz na místo kde apache hledá data)
#EXEC 80 (image potřebuje pomunikovat s vnějškem/nastavíme port přes který je možná komunikace/ u apache port 80)

#tento soubor definuje zápis pro tvorbu image