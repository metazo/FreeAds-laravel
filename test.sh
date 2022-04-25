#!/bin/bash

if [[ $# -eq 0 ]]
then
wc -l
else
arg=$1
grep -c ${arg^^}
fi