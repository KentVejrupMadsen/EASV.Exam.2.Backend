#!/usr/bin/env bash
# automated test.

# Move to parent directory
cd ..

currentDirectory=$(pwd)

# directory path names
scriptsDirectory="/scripts"
automateDirectory="/automate"

# automate collection directory
scriptCollectionDirectory="$currentDirectory$scriptsDirectory$automateDirectory"
echo "$scriptCollectionDirectory"

if [ -d "code" ]
then
  echo "in workspace enviroment"
  cd "code"
else
    exit 0
fi


echo "running automated bash scripts"
for file in "$scriptCollectionDirectory"/*.sh; do
  script="$(basename "$file")"
  full_script_path="$scriptCollectionDirectory/$script"

  bash "$full_script_path"
done