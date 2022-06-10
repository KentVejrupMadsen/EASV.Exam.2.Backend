-- Account Emails
create trigger on_insert_of_account_emails
    before insert on account_emails
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_account_emails
    before update on account_emails
    for each row
begin
    set new.content = lower(new.content);
end;


--
create trigger on_insert_of_address_road_names
    before insert on address_road_names
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_address_road_names
    before update on address_road_names
    for each row
begin
    set new.content = lower(new.content);
end;

-- countries
create trigger on_insert_of_countries
    before insert on countries
    for each row
begin
    set new.country_name = lower(new.country_name);
    set new.country_acronym = lower(new.country_acronym);
end;

create trigger on_update_of_countries
    before update on countries
    for each row
begin
    set new.country_name = lower(new.country_name);
    set new.country_acronym = lower(new.country_acronym);
end;


-- Person Firstname
create trigger on_insert_of_person_first
    before insert on person_name_first
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_person_first
    before update on person_name_first
    for each row
begin
    set new.content = lower(new.content);
end;


-- Person Middle and Lastname
create trigger on_insert_of_person_name_middle_and_last
    before insert on person_name_middle_and_last
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_person_name_middle_and_last
    before update on person_name_middle_and_last
    for each row
begin
    set new.content = lower(new.content);
end;


-- Zip Codes
create trigger on_insert_of_zip_codes
    before insert on zip_codes
    for each row
begin
    set new.area_name = lower(new.area_name);
end;

create trigger on_update_of_zip_codes
    before update on zip_codes
    for each row
begin
    set new.area_name = lower(new.area_name);
end;

-- on creation of a model. works
create trigger on_creation_of_accounts
    after insert on accounts
    for each row
begin
    insert into account_states( account_identity )
        values ( New.identity );

    insert into account_information_options( account_identity,
                                             settings,
                                             created_at,
                                             updated_at )
    values
        (
         New.identity,
         '{}',
         now(),
         now()
        );
end;

-- works
create trigger on_insert_of_apartment_levels
    before insert on apartment_levels
    for each row
begin
    set new.content = lower(new.content);
end;

create trigger on_update_of_apartment_levels
    before update on apartment_levels
    for each row
begin
    set new.content = lower(new.content);
end;