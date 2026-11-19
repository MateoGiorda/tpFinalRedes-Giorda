FROM kathara/base

RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y php libapache2-mod-php && \
    rm -f /var/www/html/index.html && \
    rm -rf /var/lib/apt/lists/*
