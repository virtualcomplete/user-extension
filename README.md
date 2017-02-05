<p align="center">
<a href="https://travis-ci.org/virtualcomplete/user-extension"><img src="https://travis-ci.org/virtualcomplete/user-extension.svg?branch=master" alt="Build Status"></a>
</p>

# Laravel User Extension

Package to extend and standardize additional user attributes in Laravel

## Why is this needed?

The standard users table only contains a select few fields.  This is by design, of course, allowing people to use Laravel for many purposes, but this project is designed for any of the following use cases:

1. Business projects that need additional user information and the ability to store multiple addresses or phone numbers for a single user.
2. Cross compatibility with Laravel packages.  The idea is to standardize the additional user attributes so Laravel packages can more easily work together using the same method of accessing these attributes.

## UserExtension

Functionality:  Adds additional fields to the users table and properties to the User model.

**Adds the fields to the users table:**

* company_name
* country (2 char)
* language (2 char)
* time_zone (meant to be linux format: America/New_York)
* deleted_at (soft deletes)

**Adds a user_addresses table with relationship to User:**

* type (ex. Physical, Billing, Mailing)
* line_1
* line_2
* city
* state
* zip
* country
* default (0/1)

**Adds a user_phones table with relationship to User:**

* type (ex. Mobile, Work, Home)
* number (\+\d only, ex: +1 (555) 555-5555 becomes +15555555555, makes it easily searchable)
* extension
* default (0/1)

**Installation Steps:**

1.  Run user_extension migration
2.  Add `implements UserExtensionInterface` to your User Model
3.  Add `use UserExtensionTrait` to your User Model

