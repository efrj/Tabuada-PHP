FROM php:8.1-apache

# Applications
RUN apt-get update
RUN apt-get install -y neofetch