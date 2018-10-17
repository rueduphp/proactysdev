#!/bin/bash

useradd --shell /bin/bash -u 1000 -o -c "" -m me
export HOME=/home/me
exec su me
