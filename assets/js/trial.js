const companies = [
	{ name: "Company 1", category: "finance", start: 1981, end: 2003 },
	{ name: "Company 2", category: "Rubber", start: 1981, end: 2003 }
];

const ages = [33, 23, 61, 47, 65, 21, 66];

companies.forEach((item) => {
	console.table(item.category, item.name);
});




