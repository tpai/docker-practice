FROM phusion/baseimage
MAINTAINER tonypai <tony77794@gmail.com>

# Use baseimage-docker's init system.
CMD ["/sbin/my_init"]

# Set working directory
WORKDIR /root

# Add files
ADD index.js /root
ADD index.html /root
ADD package.json /root

# Install NVM & NODE
RUN curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.31.0/install.sh | bash
ENV NVM_DIR=/root/.nvm
ENV SHIPPABLE_NODE_VERSION=v4.2.2
RUN . $HOME/.nvm/nvm.sh && \
nvm install $SHIPPABLE_NODE_VERSION && \
nvm alias default $SHIPPABLE_NODE_VERSION && \
nvm use default && \
npm i

# Start app
ENTRYPOINT ["/root/.nvm/versions/node/v4.2.2/bin/node", "/root/index.js"]
