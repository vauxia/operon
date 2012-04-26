## Operon TODO
This document provides a running list of the things I'm actively working on.  As I make progress, they'll be moved to a CHANGELOG and replaced by new work/ideas here.  

I'm now in the process of learning Symphony as part of implementing all of this.  Help, pointers, and references to similar and/or complementary work is appreciated!

## Current tasks
### Implement methods from original framework
* link CRUD
* item CRUD (including inheritance)
* fact CRUD

## Next steps

### Rethink "module" system
Operon originally extended its functionality by allowing people to implement "modules" to extend the items, implement link rules and links, etc.  This should probably persist in a way that's harmonious with the Bundle sytem.
* Create something minimally functional so that we can begin building an example bundle.

### Rethink privilege system
None of the tables or functions named 'privilege' or 'priv' were brought over.  Reimplement according to current best practices.
	
## Notes/Thoughts/Ideas

	* Lifecycle Callbacks and Event Listeners
		* http://docs.doctrine-project.org/projects/doctrine-orm/en/2.1/reference/events.html#lifecycle-events
		* http://symfony.com/doc/current/book/doctrine.html#book-doctrine-field-types
		* Can probably use this for triggers 
	* Implement Tree for Roles:  https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md
		* Also for permissions?
	* Loggable? https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md
		* Would this help with the link_history? and/or item logging?