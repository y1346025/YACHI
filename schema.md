In the current database schema,we list the main items like store name, food items and a category for defined it is whether eat, drink, play Yilan and Taiwan.The category is for our purpose of helping people who visiting the Jiaoxi Night Market they can easily understand and clearly know where the store is. As for the food items, we created K1~K30 for our keyword searching. In this method, the user’s input keywords must be totally the same as the K1~K30 one of them.

Since that,we think we can improve the database schema by recommending to sort, for keyword search, and can use recommendations to sort by the relevance of the keywords. For example, OES launched by openfind will be faster than database query. Or we can use the syntax LIKE. For instances:
	1.%: Any string containing 0 or more characters.
WHERE address LIKE'%Zhongshan North Road%', you can find all the records containing "Zhongshan North Road" in the address.

2._ (Underline): any single character.
WHERE address LIKE'Taipei_', you can find records whose address starts with "Taipei" and the number of words is equal to 3 words.

3.[]: Any single character in the specified range ([a-f]) or set ([abcdef]).
WHERE PID LIKE'[A-C]%', you can find the records whose PID starts with "A-C". (The range in brackets can only be numbers or English letters)

	4.[^]: Any single character not in the specified range ([^a-f]) or set ([^abcdef]).
WHERE PID LIKE'A[^2]%', you can find the PID with "A" at the beginning, and exclude the record whose second digit is 2.


We can also use a partitioned table of indexes for respective usage so that make good use of database indexes to increase query efficiency.
