FROM golang:alpine as builder

WORKDIR /app/

COPY . .

RUN go mod tidy

RUN go build -o /app/bin /app/main.go


FROM alpine:latest

WORKDIR /app/

COPY --from=builder /app/ /app/

CMD /app/bin
