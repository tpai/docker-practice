FROM golang:1.6
MAINTAINER MilesChou <jangconan@gmail.com>

RUN mkdir -p /go/src/app
WORKDIR /go/src/app

COPY . /go/src/app
RUN go-wrapper download
RUN go-wrapper install

CMD ["go-wrapper", "run"]
