#!/bin/bash

#Necessário instalar o sendEmail:
#apt-get update
#apt-get install sendemail

sendEmail -f mtalertsalva@gmail.com -t $1 -u "$2" -s smtp.gmail.com:587 -o tls=yes message-charset=utf-8 -xu "mtalertsalva" -xp "MTAlert2018" -m "$3"


