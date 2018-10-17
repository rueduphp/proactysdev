FROM rueduphp/php72devlatest:first

RUN docker-php-ext-configure bcmath && docker-php-ext-install -j$(nproc) bcmath
