# ADS Lab 03 - Pipelines
**Authors**: Samuel Roland, Antoine Leresche, Nicolas Carbonara  
**Date**: 2025-03-10

## How to execute
As the instructions were super clear on the source and destinations folder for each script, we explained our choice at the top of each file in the header. We wrote a basic script `deploy` to run them all on the server.

**Deploy the solution**

**Generate all files on the server**

```sh
bash deploy
```

## Task 4 - Use SSH Tunneling
```sh
ssh labc0@ads.iict.ch -L 5555:localhost:3306
```

![connection](lab04/MySQLWorkbenchConnectionConf.png)

![select](lab04/SelectTable.png)
