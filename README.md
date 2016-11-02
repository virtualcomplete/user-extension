# Laravel User Extension

Package to extend and standardize additional user attributes in Laravel

## Why is this needed?

The standard users table only contains a select few fields.  This is by design, of course, allowing people to use Laravel for many purposes.  However, when various packages need to work together, it makes sense to have additional uniform fields surrounding each user.  This is meant to be utilized with the virtualcomplete/package-manager.

You can choose to use just the UserExtensionTrait and migration but you can also use the ParentUserTrait and migration to enable sub-user support.

## UserExtension

Functionality:  Adds additional fields to the users table and properties to the User model.

Adds the fields:

* company_name
* address1
* address2
* city
* state
* zip
* country (2 char)
* phone (\+x\d only, ex: +1 (555) 555-5555 x2 becomes +15555555555x2)
* language (2 char)
* time_zone (meant to be linux format: America/New_York)
* deleted_at (soft deletes)

**Installation Steps:**

1.  Run user_extension migration
2.  Add `implements UserExtensionInterface` to your User Model
3.  Add `use UserExtensionTrait` to your User Model

## ParentUser

Functionality:  Allows parent and child relationships with users creating sub-user functionality.

Adds the fields:

* parent_id

**Installation Steps:**

1.  Run user_parent_id migration
2.  Add `implements ParentUserInterface` to your User Model
3.  Add `use ParentUserTrait` to your User Model

