#!/bin/bash
cd ..
cd code
./vendor/zircote/swagger-php/bin/openapi ./app --format json > swagger.json
