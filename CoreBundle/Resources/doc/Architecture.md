# Operon data types
At the time of writing (April 2012), this is how Operon is expected to work, based on how the original implementation was working.  At the time you you reading this (sometime after April 2012), there's a good chance that most of this is not yet operational.  This overview will help potential collaborators and users understand the general structure and design goals for Operon to see if you want to continue supporting it or working with it.

## Item
An item is any kind of "person or thing", or the lowest-level entity in the operon database.  Items can be extended to contain fields and attributes that represent something a little more familiar.  For example, a *Person* item will have first name and last name fields, while a *Website* item has a URL.

Right, so Item==Entity.

## Role
An item can have one or more Role.  Roles allow you to describe the different things that the item might be able to do.  For example, a *Person* item might be allowed to be an Employee, a Spouse, a Customer, or a Parent.

## LinkRule
A LinkRule establishes the rules for whether two items can be related.  A LinkType defines which Roles are allowed to participate in the "from" and the "to" sides of the link.  

For example, you might define a LinkRule called "Customer", which describes a relationship between an item with a *Vendor* role and an item with a *Customer* role.  Because a *Person* and an *Organization* can each have both a *Customer* role and a *Vendor* Role, it's possible for a company to sell to a person, or vice-versa.

A different LinkRule might define a Marriage, which requires that each item can participate in a *Spouse* role.  Since a *Person* can utilize the Spouse role, a Marriage can connect two people.  But since an *Organization* can't participate in that role, you can't marry your work!

## Link
A Link is a relationship between two items.  It can have a start date, an end date, and is always defined by a LinkType, which dictates which items can be linked.

Links are really the heart of Operon.  You can attach extra information to a Link, so  an employee might have salary information as part of her employer/employee relationship.  And when a link is terminated, not deleted but it's moved to LinkHistory.  So if an employee leaves her job, her current employment status changes and the job becomes part of her job history.

Links would also be used to define various workflow states and other business rules.  If your application is for salesforce automation, the default Link for new contacts might be called something like *Prospects*.  You associate sales calls and other actions with that Prospect relationship until you succeed and they become a *Customer* and your sales are logged against the customer relationship (good for you, by the way!). 

## Fact
Facts are things we know about Items and their Links.   These include events, tasks, or messages that are part of a relationship between two items.  If you've ever worked with a CRM system, Facts are basically the same things you're used to referring to as activities.

A Fact is related to both an Item and to a Link that the Item is currently participating in.  This allows you to do some interesting reporting.  For example, you can calculate how much work goes into a Prospect relationship before it becomes a Customer relationship.  Or, if someone is both your Acquaintance and your Co-worker, you can associate "Buy a birthday card" task with the *Acquaintance* relationship and keep your "Schedule a meeting" task in a work context.