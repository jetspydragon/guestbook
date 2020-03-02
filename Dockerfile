FROM ubuntu

RUN apt-get update
RUN apt-get install -y php

COPY . /opt/source-code

ENTRYPOINT [ "symfony" ]
