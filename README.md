# Buildertrend Pro Websites Support Plugin

A WordPress plugin that provides essential support tools and features for Buildertrend Pro Websites.

## Description

This plugin adds several features to enhance WordPress management for Buildertrend Pro Websites:

- Custom dashboard widget for Buildertrend Updates
- Dashboard widget management (removal of unnecessary widgets)
- Dashboard reset functionality
- Support features for website administrators

## Installation

1. Upload the `bt-website-support` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. The plugin will automatically configure itself

## Features

### Buildertrend Updates Dashboard Widget

A custom dashboard widget that displays important Buildertrend updates in the main WordPress dashboard.

### Dashboard Widget Management

Removes unnecessary default WordPress dashboard widgets to create a cleaner, more focused admin experience.

### Dashboard Reset Functionality

Allows administrators to reset their dashboard layout to default settings.

**Usage:**
1. Navigate to your WordPress dashboard
2. Add the query parameter to reset: `https://yourwebsite.com/wp-admin/index.php?reset_dashboard=1`
3. The dashboard will reset and redirect back to the dashboard page

Example URL:
```
https://example.com/wp-admin/index.php?reset_dashboard=1
```

**Note:** Only users with `manage_options` capability (administrators) can reset the dashboard.

## Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher

## Changelog

### 1.0.0
- Initial release

## Credits

Created by the BT Pro Websites Team

## License

This plugin is licensed under the GPL v2 or later.

```
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
```