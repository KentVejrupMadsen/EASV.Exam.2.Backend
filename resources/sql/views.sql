-- works
create view accounts_view as
select accounts.identity,
       accounts.username,
       ae.content as email,
       accounts.email_verified_at,
       accounts.password,
       accounts.remember_token,
       accounts.created_at,
       accounts.updated_at,
       accounts.settings
from accounts
         left join account_emails ae on accounts.account_email_identity = ae.identity;

-- works
create view zip_codes_view_full as
select zip_codes.identity,
       zip_codes.area_name,
       zip_codes.zip_number,
       c.country_name,
       c.country_acronym
from zip_codes
         left join countries c on zip_codes.country_identity = c.identity;

-- works
create view zip_codes_view_short as
select zip_codes.identity,
       zip_codes.area_name,
       zip_codes.zip_number,
       c.country_acronym
from zip_codes
         left join countries c on zip_codes.country_identity = c.identity;

-- works
create view newsletter_view as
select newsletter_users.identity,
       ae.content as email,
       newsletter_users.options
from newsletter_users
         left join account_emails ae on ae.identity = newsletter_users.email_identity;

-- works
create view person_names_view as
select person_name.identity,
       person_name.account_information_identity,
       pnf.content as person_first_name,
       person_name.person_name_middlename,
       pnmal.content as person_last_name
from person_name
         left join person_name_first pnf on pnf.identity = person_name.person_name_first_identity
         left join person_name_middle_and_last pnmal on pnmal.identity = person_name.person_name_lastname_identity;

-- works
create view addresses_view as
select ad.identity,
       ad.account_information_identity,
       arn.content as road_name,
       ad.road_number,
       ad.level_identity,
       c.country_name as address_country,
       ad.zip_code_identity
from addresses as ad
         left join countries c on c.identity = ad.country_identity
         left join address_road_names arn on arn.identity = ad.road_name_identity
         left join apartment_levels alvl on alvl.identity = ad.level_identity;
