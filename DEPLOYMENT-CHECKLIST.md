# CouchCMS Deployment Checklist

## Pre-deployment (Local)
- [x] Site structure analyzed
- [x] Example PHP file created (`index-couch-version.php`)
- [x] Config template created

## Step 1: Download CouchCMS
1. Go to https://www.couchcms.com/
2. Download latest version (2.3+)
3. Extract the ZIP file - you'll get a `couch/` folder

## Step 2: Prepare on CrazyDomains

### Create MySQL Database
1. Log into CrazyDomains cPanel
2. Navigate to **MySQL Databases**
3. Create new database:
   - Database name: `mindful_cms` (or similar)
   - Click "Create Database"
4. Create database user:
   - Username: create a username
   - Password: create a STRONG password
   - Click "Create User"
5. Add user to database:
   - Select the user
   - Select the database
   - Grant ALL PRIVILEGES
   - Click "Add"
6. **SAVE THESE DETAILS**:
   - Database name: _________________
   - Username: _________________
   - Password: _________________
   - Host: usually `localhost`

## Step 3: Upload CouchCMS Files

### Via cPanel File Manager:
1. In cPanel, go to **File Manager**
2. Navigate to `public_html/` (your site root)
3. Upload the entire `couch/` folder
4. Extract if uploaded as ZIP

### Via FTP:
1. Connect using FileZilla or similar
2. Upload `couch/` folder to site root
3. Ensure permissions are correct (755 for folders, 644 for files)

## Step 4: Configure CouchCMS
1. Navigate to `public_html/couch/`
2. Find `config.example.php`
3. Rename or copy it to `config.php`
4. Edit `config.php` with your database details from Step 2
5. Set `K_SITE_URL` to `https://mindfuljourneypsychology.com.au/`

## Step 5: First-time Installation
1. In browser, visit: `https://mindfuljourneypsychology.com.au/couch/`
2. CouchCMS will detect it's first run and show installation screen
3. Create your admin account:
   - Username: (for client access)
   - Password: (STRONG password)
   - Email: (client's email)
4. Click "Install"
5. **SAVE ADMIN LOGIN DETAILS**

## Step 6: Convert HTML to PHP

### Option A: Manual rename on server
1. In cPanel File Manager or FTP:
   - Rename `index.html` → `index.php`
   - Rename `privacy.html` → `privacy.php`
   - Rename `terms.html` → `terms.php`

### Option B: Upload new PHP files
1. Create PHP versions locally (see `index-couch-version.php` as example)
2. Upload to server
3. Delete old HTML files

### Add CouchCMS to each PHP file:
**Top of file** (line 1):
```php
<?php require_once( 'couch/cms.php' ); ?>
```

**Bottom of file** (last line):
```php
<?php COUCH::invoke(); ?>
```

## Step 7: Define Editable Regions
Add `<cms:template>` section after line 1 (see `index-couch-version.php` example).

For each editable text area, add:
```php
<cms:editable name='field_name' label='Friendly Label' type='text'>
  Default content here
</cms:editable>
```

Then replace content in HTML with:
```php
<cms:show field_name />
```

## Step 8: Register Templates
1. Visit each PHP page as admin: 
   - `https://mindfuljourneypsychology.com.au/index.php`
   - `https://mindfuljourneypsychology.com.au/privacy.php`
   - `https://mindfuljourneypsychology.com.au/terms.php`
2. This registers them with CouchCMS

## Step 9: Test Admin Panel
1. Go to `https://mindfuljourneypsychology.com.au/couch/`
2. Login with admin credentials
3. You should see all three pages listed
4. Click "Edit" on Home Page
5. Modify some text
6. Click "Save"
7. View the live site - changes should appear immediately

## Step 10: Setup .htaccess (Optional - for pretty URLs)
CouchCMS includes `.htaccess` for clean URLs like `/about/` instead of `/about.php`

If needed, copy `.htaccess` from `couch/` folder to your site root.

## Step 11: Security Hardening
1. Change admin folder name (optional but recommended):
   - Rename `couch/` to something like `admin-xyz/`
   - Update `K_ADMIN_URL` in config.php
2. Restrict admin access by IP (in .htaccess)
3. Use HTTPS (already enabled on your site ✓)
4. Regular backups via cPanel

## Client Handoff
Provide client with:
- Admin URL: `https://mindfuljourneypsychology.com.au/couch/`
- Username: ________________
- Password: ________________
- Basic instructions: "Login → Select page → Click Edit → Modify text → Save"

## Troubleshooting

### Blank page after conversion
- Check PHP errors: Add to top of file: `ini_set('display_errors', 1);`
- Verify `couch/cms.php` path is correct
- Check file permissions

### Can't login to admin
- Verify database credentials in `config.php`
- Check if database tables were created
- Try clearing browser cache/cookies

### Changes not appearing
- Ensure page was registered (visit as admin first)
- Check if caching is enabled
- Verify editable regions are properly defined

## Support
- CouchCMS Documentation: https://docs.couchcms.com/
- CouchCMS Forum: https://www.couchcms.com/forum/
