FROM mediawiki:1.44

# Install git for cloning extensions
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

# EmbedVideo (StarCitizenWiki fork - works with 1.36+)
RUN git clone --depth 1 \
    https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo.git \
    /var/www/html/extensions/EmbedVideo

# CloudflarePurge
RUN git clone --depth 1 \
    https://gerrit.wikimedia.org/r/mediawiki/extensions/CloudflarePurge \
    /var/www/html/extensions/CloudflarePurge
