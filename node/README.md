Build A Node Web App
===

Docker make things easy!

![](http://i.imgur.com/1pXe2aP.png)

## How to build

```
cd node/
docker build -t tonypai/helloworld .
```

## How to run

```
docker run -d -p 80:80 tonypai/helloworld
```
