FROM kathara/quagga:latest

RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y isc-dhcp-server && \
    rm -rf /var/lib/apt/lists/*
