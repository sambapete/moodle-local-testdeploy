# local_testdeploy

Plugin Moodle minimal pour tester le script de déploiement automatique.

## Ce qu'il fait

Affiche une page simple confirmant que le plugin a été déployé avec succès.
Accessible à : `https://votre-moodle/local/testdeploy/`

## Test avec deploy.py

```bash
# Depuis un répertoire local
python deploy.py --local-path /Volumes/UdeM/CICD/moodle-local-testdeploy \
                 --method ssh --host <ip-ec2> --user ubuntu \
                 --key-file ~/.ssh/ma-cle.pem

# Dry-run d'abord
python deploy.py --local-path /Volumes/UdeM/CICD/moodle-local-testdeploy \
                 --method ssh --host <ip-ec2> --user ubuntu \
                 --key-file ~/.ssh/ma-cle.pem --dry-run
```

## Vérification après déploiement

1. Aller sur `https://votre-moodle/local/testdeploy/`
2. La page affiche le numéro de version et la date de déploiement
3. Dans Administration > Plugins, chercher "Test Deploy"
