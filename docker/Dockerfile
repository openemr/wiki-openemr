# 1.44 is EOL and its image is frozen on PHP 8.3.33, which is vulnerable to
# PHP2Shell (CVE-2026-109618/109619). Rebuild with --pull to get patched PHP.
FROM mediawiki:1.45

# Install git for cloning extensions
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

# Enable proxy modules
RUN a2enmod proxy proxy_http rewrite ssl

# EmbedVideo (StarCitizenWiki fork - works with 1.36+)
RUN git clone --depth 1 --branch v4.2.0 \
    https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo.git \
    /var/www/html/extensions/EmbedVideo

# CloudflarePurge
RUN git clone --depth 1 --branch REL1_45 \
    https://gerrit.wikimedia.org/r/mediawiki/extensions/CloudflarePurge \
    /var/www/html/extensions/CloudflarePurge

# GoogleAnalytics, deprecated, will move to CF
RUN git clone --depth 1 --branch REL1_45 \
    https://gerrit.wikimedia.org/r/mediawiki/extensions/googleAnalytics \
    /var/www/html/extensions/googleAnalytics
    