## Lab 01
> 1. Avec quelle touche se déplace-t-on au début du fichier ?

`g`

> 2. Avec quelle touche se déplace-t-on à la fin du fichier ?

`G`

> 3. Comment peut-on commencer à chercher toutes les occurrences du motif admin ?

`/admin`

> 4. Comment se déplace-t-on à l'occurrence suivante ? Et à la précédente ?

`n` pour next et `N` pour précédent

> 5. Quel est l'effet de taper -i avant une recherche ? Et un -i répété ? Positionnez-vous au début du fichier et cherchez le motif bob.

Taper `-i` dans less directement (sans / attention) permet d'activer ou désactiver la sensivité à la casse

> 6. Que se passe-t-il si vous ouvrez un fichier compressé, par exemple /usr/share/doc/bash/INTRO.gz ?

Décompression à la volée + affichage du txt

> 2. une archive compressée, par exemple /usr/share/doc/apg/php.tar.gz ?

Listing des fichiers dans l'archive

## Part 2 - Unix
> 1. Quelles sont les neuf sections du manuel Unix ?
1. Commandes
1. Syscalls
1. Fonctions de la libc
1. Special files under /dev -> `man sd`
1. Fichiers de config système /etc/passwd
1. Games
1. Misc
1. System admin commands -> ping, iptables, useradd
1. Kernel stuff -> ya rien sur ma machine `whatis -s 9 -w "*"` ou `apropos -s 9 .`

> 2. Quelle section du manuel contient les commandes utilisateur telles que cat et ls ?

Section 1
j
> 3. Quelle section contient des commandes d'administration système, telles que shutdown ?

Section 8

> 4. Quelle est la difference entre les deux commandes: man 1 passwd et man 5 passwd ?

Une fois c'est la commande `passwd` pour changer son mot de passe, et sinon ça parle du fichier `/etc/passwd`

## 3. La structure des "man pages"
OK

Probablement utile !!
```sh
man -k
```

### 3.4
1. liste les fichiers du dossier courant
1. ls -la
1. mode récursif
1. visualisation en arbre avec `tree` mais similaire à `ls -R`

## 4. Chemins absolus et relatifs
1. /usr/bin/ssh
1. relatif
    1. bin/ssh
    1. ssh
    1. ../bin/ssh
    1. ../../bin/ssh

DONE

```
.
├── index.html
├── labs.html
├── labs.d
│ ├── lab01.html
│ └── starter.tar.gz
└── downloads
└── lectures
│ └── lc01.html
  └── index.html
```
mv ../labs/starter.tar.gz . fails

DONE

## 6. Globbing
1. ls 2015-03-01*
1. ls *database.log
1. ls *app*.log

DONE
