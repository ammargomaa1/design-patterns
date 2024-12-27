# Observer Design Pattern  

**Date:** 2024-12-24  
**Tags:** [[Behavioral Design Patterns]]

## Pattern Name  
-  Observer

## Category  
- Behavioral

## Intent  
### What does this pattern solve?  
Imagine a Customer who wants a specific product, like the latest iPhone, which will soon arrive at a Store.

The Customer could visit the Store every day to check if it’s available, but most trips would be a waste of time. Alternatively, the Store could email all customers every time a new product arrives, but this might annoy those not interested.

This creates a conflict: either the Customer wastes time, or the Store wastes resources and risks upsetting its customers.
## Applicability  
- When to use it?  
When you have an observer/observant relationship, this means that a specific change within an object must be known for another set of objects.
## Participants  
- Key components involved:  
Observer => Observant

## Structure  
- Diagram or explanation of the pattern's structure.  

## Implementation Steps  
1.  We insure that  we have three elements:
	1. the first element will be the container of where does the action happens and whom's subscribed to i.g.: Publisher
	2. the subscriber, who will need to be notified whenever the action happens?
	3. the main state, the value which we will change and notify about

## Code Example  
[Observer Pattern](https://github.com/ammargomaa1/design-patterns/tree/main/Patterns/Behavioral/Observer)
