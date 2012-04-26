# Operon README
Operon's goal is to provide an efficient and highly robust relationship management system. It may be useful for managing relationships between a variety of entity types, but the primary focus is to provide an underlying structure for CRM tools.  

## Overall project goals
Work on this project will be in keeping with some high-level goals and philosophies, which are as follows:

* **Extensibility:** It should be possible for a programmer to add new item types, relationship types easily by extending what's there.  The underlying framework should be able to adapt to a variety of technical models seamlessly.
* **Simplicity:** Avoid exposing developers or end-users to overly-technical language or academic theories. Expose functionality through simple function calls and a succinct API.  We're not here to prove how intelligent we are, we're here to help people get stuff done!
* **Interoperability:** As functionality is built on top of the Operon framework, avoid trying to become an end-all solution.  Instead, attempt to work well with what's already available by emphasizing data mapping, syndication and interoperability with existing frameworks, software, and APIs.

## Getting started
This project is in its early stages, so check out the current status and next steps in the [TODO](TODO.md) file.  If it seems "ready enough" for you to jump in and start checking it out, please check out the [Architectural overview](Architecture.md) to understand how things are put together.

## Background
The original version of the Operon framework was written entirely in plpgsql, a stored procedure language for PostgreSQL.  It implemented its own table inheritence and relationship system, and you could extend it by making a few simple function calls that created table structures, item types, and complex relationships for you.  Perhaps this sounds a bit crazy, but I will always appreciate the elegance a the system was language agnostic (if not database agnostic).  But times change, and it's more valuable to be service agnostic - allowing you to execute functions remotely via APIs -  than it is to be language agnostic.  Operon's development pholosophy and structural concpets are ready to be introduced to a modern framework.

