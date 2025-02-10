function myFunc() {
  // Some code here...
  if (someCondition) {
    return; // Explicit return; avoid implicit behavior 
  }
  // More code that should only execute if someCondition is false
  return someValue; //Explicit return to handle the case when condition is false 
} 