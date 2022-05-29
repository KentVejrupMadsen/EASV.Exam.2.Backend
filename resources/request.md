# Request Structure
``` json
{
    "request":
    {
        "account" : 
        {
            "entities": 
            {
                "person": 
                {
                    "address":  
                    {
                    
                    },
                    "email":
                    {
                    
                    },
                    "name": 
                    {
                    
                    },
                }
            },
            "information": 
            {
            },
            "newsletter": 
            {
            }
        },
        "options" : 
        {
            "find": {},
            "state": {}
        },
        "security" : 
        {
            "recap": {},   
            "configuration": {},
            "csrf": {},
        },
        "tool" : 
        {
            "board":{},
            "kanban":{},
            "project":{},
            "projectMember":{},
            "tasks":{}
        }
    }
}
```