# Fix Industry Purchases History Issue

## Tasks
- [ ] Update php/crud.php: Change ORDER BY t.created_at DESC to ORDER BY t.transaction_date DESC in get_industry_purchases query
- [ ] Update js/scripts.js: Change purchase.created_at to purchase.transaction_date in displayIndustryPurchases function
- [ ] Test the purchases section to ensure history displays correctly
