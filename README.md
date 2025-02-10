# Unexpected Implicit Return in PHP Conditional Statements

This example demonstrates a common pitfall in PHP: unexpected implicit returns within conditional statements.  If a conditional statement (e.g., `if`, `elseif`, `else`) doesn't explicitly return a value, and the code path within the statement doesn't reach the end of the function, PHP might implicitly return `null` or exhibit other unpredictable behaviour.  This bug is subtle and can be difficult to track down, especially in larger codebases.