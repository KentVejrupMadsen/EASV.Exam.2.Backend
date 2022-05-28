create view accounts_view as
select accounts.id,
       accounts.username,
       ae.content as email,
       accounts.email_verified_at,
       accounts.password,
       accounts.remember_token,
       accounts.created_at,
       accounts.updated_at,
       accounts.settings
from accounts
         left join account_emails ae on accounts.email_id = ae.id;


create view projects_view as
select projects.id,
       projects.account_owner_id,
       pt.content as project_title,
       projects.description,
       projects.tags,
       projects.created_at,
       projects.updated_at
from projects
         left join project_titles pt on projects.project_title_id = pt.id;


create view boards_view as
select boards.id,
       boards.kanban_id,
       bt.content as board_title,
       boards.body,
       boards.created_at,
       boards.updated_at
from boards
         left join board_titles bt on boards.board_title_id = bt.id;


create view zip_codes_view_full as
select zip_codes.id,
       zip_codes.area_name,
       zip_codes.zip_number,
       c.country_name,
       c.country_acronym
from zip_codes
         left join countries c on zip_codes.country_id = c.id;


create view zip_codes_view_short as
select zip_codes.id,
       zip_codes.area_name,
       zip_codes.zip_number,
       c.country_acronym
from zip_codes
         left join countries c on zip_codes.country_id = c.id;


create view newsletter_view as
select newsletter_users.id,
       ae.content as email,
       newsletter_users.options
from newsletter_users
         left join account_emails ae on ae.id = newsletter_users.email_id;

create view person_names_view as
select person_name.id,
       person_name.account_information_id,
       pnf.content as person_first_name,
       person_name.person_name_middlename,
       pnmal.content as person_last_name
from person_name
         left join person_name_first pnf on pnf.id = person_name.person_name_first_id
         left join person_name_middle_and_last pnmal on pnmal.id = person_name.person_name_lastname_id;

create view kanbans_view as
select kanbans.id,
       project_id,
       kt.content as kanban_title,
       kanbans.created_at,
       kanbans.updated_at
from kanbans
         left join kanban_titles kt on kanbans.kanban_title_id = kt.id;

create view addresses_view as
select ad.id,
       ad.account_information_id,
       arn.content as road_name,
       ad.road_number,
       ad.levels,
       c.country_name as address_country,
       ad.zip_code_id
from addresses as ad
         left join countries c on c.id = ad.country_id
         left join address_road_names arn on arn.id = ad.road_name_id;

create view project_members_view as
select project_members.id,
       project_members.project_id,
       project_members.account_id,
       mg.content as member_group
from project_members
         left join member_groups mg on project_members.member_group_id = mg.id;