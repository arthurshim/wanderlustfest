#!/bin/sh
<<<<<<< HEAD
=======
# $Id: code-clean.sh,v 1.8 2005/08/11 13:02:08 dries Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8

find . -name "*~" -type f | xargs rm -f
find . -name ".#*" -type f | xargs rm -f
find . -name "*.rej" -type f | xargs rm -f
find . -name "*.orig" -type f | xargs rm -f
find . -name "DEADJOE" -type f | xargs rm -f
find . -type f | grep -v ".psp" | grep -v ".gif" | grep -v ".jpg" | grep -v ".png" | grep -v ".tgz" | grep -v ".ico" | grep -v "druplicon" | xargs perl -wi -pe 's/\s+$/\n/'
find . -type f | grep -v ".psp" | grep -v ".gif" | grep -v ".jpg" | grep -v ".png" | grep -v ".tgz" | grep -v ".ico" | grep -v "druplicon" | xargs perl -wi -pe 's/\t/  /g'
