--
create trigger on_insert_of_account_emails
    before insert on testing.account_emails
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_account_emails
    before update on testing.account_emails
    for each row
begin
    set new.content = lower(new.content);
end;


--
create trigger on_insert_of_address_road_names
    before insert on testing.address_road_names
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_address_road_names
    before update on testing.address_road_names
    for each row
begin
    set new.content = lower(new.content);
end;


--
create trigger on_insert_of_addresses
    before insert on testing.addresses
    for each row
begin
    set new.levels = lower(new.levels);
end;

create trigger on_update_of_addresses
    before update on testing.addresses
    for each row
begin
    set new.levels = lower(new.levels);
end;


--
create trigger on_insert_of_board_titles
    before insert on testing.board_titles
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_board_titles
    before update on testing.board_titles
    for each row
begin
    set new.content = lower(new.content);
end;


-- countries
create trigger on_insert_of_countries
    before insert on testing.countries
    for each row
begin
    set new.country_name = lower(new.country_name);
    set new.country_acronym = lower(new.country_acronym);
end;

create trigger on_update_of_countries
    before update on testing.countries
    for each row
begin
    set new.country_name = lower(new.country_name);
    set new.country_acronym = lower(new.country_acronym);
end;


-- kanban title
create trigger on_insert_of_kanban_titles
    before insert on testing.kanban_titles
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_kanban_titles
    before update on testing.kanban_titles
    for each row
begin
    set new.content = lower(new.content);
end;


-- Member groups
create trigger on_insert_of_member_groups
    before insert on testing.member_groups
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_member_groups
    before update on testing.member_groups
    for each row
begin
    set new.content = lower(new.content);
end;


-- Person Firstname
create trigger on_insert_of_person_first
    before insert on testing.person_name_first
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_person_first
    before update on testing.person_name_first
    for each row
begin
    set new.content = lower(new.content);
end;

-- Person Middle and Lastname
create trigger on_insert_of_person_name_middle_and_last
    before insert on testing.person_name_middle_and_last
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_person_name_middle_and_last
    before update on testing.person_name_middle_and_last
    for each row
begin
    set new.content = lower(new.content);
end;


-- Project titles
create trigger on_insert_of_project_titles
    before insert on testing.project_titles
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_project_titles
    before update on testing.project_titles
    for each row
begin
    set new.content = lower(new.content);
end;


-- Zip Codes
create trigger on_insert_of_zip_codes
    before insert on testing.zip_codes
    for each row
begin
    set new.area_name = lower(new.area_name);
end;

create trigger on_update_of_zip_codes
    before update on testing.zip_codes
    for each row
begin
    set new.area_name = lower(new.area_name);
end;