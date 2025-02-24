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
1. Kernel stuff -> ya rien sur ma chine `whatis -s 9 -w "*"` ou `apropos -s 9 .`

> 2. Quelle section du manuel contient les commandes utilisateur telles que cat et ls ?

Section 1
> 3. Quelle section contient des commandes d'administration système, telles que shutdown ?

Section 8
> 4. Quelle est la difference entre les deux commandes: man 1 passwd et man 5 passwd ?

Une fois c'est la commande `passwd` pour changer son mot de passe, et sinon ça parle du fichier `/etc/passwd`

