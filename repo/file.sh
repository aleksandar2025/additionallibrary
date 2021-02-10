#!/bin/bash
for FILE in `find ~/Desktop/ -name '*.css'`
do
	sed -i 's+http://+https://+g' $FILE
done
