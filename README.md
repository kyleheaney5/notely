# notely

Notely is a small project I made that allows users to create, update and share notes.

## Getting Started

### Docker

#### CLI Launch

Build the image first:

```bash
$ docker build -t kyleheaney5/notely:dev .
```

Run the container:

```bash
$ docker run -d --rm -v $PWD:/var/www/html -p "80:80" kyleheaney5/notely:dev
```

#### Docker-Compose Launch

Docker-compose auto builds the image when you launch it.

```bash
$ docker-compose up -d
```