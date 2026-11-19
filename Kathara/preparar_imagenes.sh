#!/bin/bash

set -e

echo "Construyendo imagen de Quagga e ISC DHCP..."
docker build -t bytza/quagga-dhcp:latest imagenes/quagga-dhcp

echo "Construyendo imagen de BIND y cliente DHCP..."
docker build -t bytza/bind-dhcp-client:latest imagenes/bind-dhcp-client

echo "Construyendo imagen de Apache y PHP..."
docker build -t bytza/apache-php:latest imagenes/apache-php

echo "Las imagenes fueron construidas correctamente."
echo "El laboratorio puede iniciarse con: kathara lstart"
