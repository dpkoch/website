#!/bin/bash
rsync -rv --exclude-from=".exclude" --delete-after . dpkoch@danielpkoch.com:/var/www/html/
