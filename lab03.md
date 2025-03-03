

# Task 3 - Conversion to CSV
## Commands used to generate the CSV
```terminal
# 1st command, not using the semi-colon
echo "date,nb_accesses" > accesses.csv | cat access.log | cut -d ' ' -f4 | cut -c2-12 | sort | uniq -c | awk '{print $2","$1}' >> accesses.csv

# 2nd command, using the semi-colon
echo "date,nb_accesses" > accesses.csv;cat access.log | cut -d ' ' -f4 | cut -c2-12 | sort | uniq -c | awk '{print $2","$1}' >> accesses.csv
```

## Output
```csv
date,nb_accesses
02/Apr/2017,17
03/Apr/2017,227
04/Apr/2017,155
05/Apr/2017,2804
06/Apr/2017,1309
07/Apr/2017,233
10/Apr/2017,79
13/Apr/2017,1
21/Apr/2017,7
26/Apr/2017,3
27/Apr/2017,3
29/Mar/2017,559
30/Mar/2017,382
31/Mar/2017,133
```
