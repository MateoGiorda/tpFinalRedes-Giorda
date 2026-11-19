FROM kathara/bind:9.18

RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y isc-dhcp-client && \
    rm -rf /var/lib/apt/lists/*
