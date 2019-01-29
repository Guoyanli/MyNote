tail -n10000 biz.log | grep "ImportCardRequest"  | awk -F, '{k=$1;a[k]++}END{for(i in a){print i,a[i]}}' | sort -k 1,2
