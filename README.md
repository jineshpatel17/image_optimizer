# image_optimizer:

### description
Find and replace images with optimized versions. 

### git configuration
```bash
cd /home/sites
git clone git@github.com:{YOUR-GITHUB-USERNAME}/image_optimizer.git
cd /home/sites/image_optimizer/
git remote add upstream git@github.com:JellyfishGroup/image_optimizer.git
git remote set-url upstream --push no-pushing
git remote -v

# set apache to own the newly created directory
chown apache:apache -R /home/sites/image_optimizer/public_html/
```
