FROM mediawiki:1.36

# Install git for cloning extensions
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

# EmbedVideo (StarCitizenWiki fork - works with 1.36+)
RUN git clone --depth 1 -b v2.9.0 \
    https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo.git \
    /var/www/html/extensions/EmbedVideo
