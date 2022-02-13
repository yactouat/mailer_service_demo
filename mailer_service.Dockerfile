FROM php:8.1.2-fpm
RUN apt update && apt upgrade -y && apt install -y mailutils msmtp msmtp-mta
COPY ./msmtprc /etc/msmtprc

EXPOSE 9000