#!/usr/bin/env bash

if ! command -v jq &> /dev/null ; then
    echo "jq is not installed. Please install jq (https://jqlang.github.io/jq/) before running this script."
fi

jq --arg newCode "$(cat runPHPCode.php)" '.steps[] |= if .step == "runPHP" then .code = $newCode else . end' blueprint.json > new_blueprint.json

rm blueprint.json
mv new_blueprint.json blueprint.json
