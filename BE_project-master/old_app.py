from ctypes import alignment
from email.policy import default
import pandas as pd
import streamlit as st
import plotly.express as px
from PIL import Image

st.set_page_config(page_title='Survey Results')
st.header('Data visualisation-BE-Project')
st.subheader('This is representation of bar graph and pie chart')

### --- LOAD DATAFRAME
excel_file = 'Survey_Results.xlsx'
sheet_name = 'DATA'

df = pd.read_excel(excel_file,
                   sheet_name=sheet_name,
                   usecols='A:D')

df_participants = pd.read_excel(excel_file,
                                sheet_name= sheet_name,
                                usecols='F:G')

df_participants.dropna(inplace=True)

temp = list(df.keys())
temp

chart_type = st.selectbox('Select the way you would like your data to be visualised in', ('Bar Graph', 'Pie Chart'))


# --- STREAMLIT SELECTION
if chart_type == 'Bar Graph':
        filter1, filter2 = st.columns(2)

        with filter1:
                f1 = st.selectbox('Select Filter 1', options=tuple(temp))
                
        with filter2:
                f2 = st.selectbox('Select Filter 2', options=tuple(temp))


        if df[f1].dtypes == 'object':
                department = df[f1].unique().tolist()                
                department_selection = st.multiselect('Department:',
                                        department,
                                        default=department)

        elif df[f1].dtypes == 'int64':
                ages = df[f1].unique().tolist()
                age_selection = st.slider('Filter 1:',
                                        min_value= min(ages),
                                        max_value= max(ages),
                                        value=(min(ages),max(ages)))
                            
        if df[f2].dtypes == 'object':
                department = df[f2].unique().tolist()                
                department_selection = st.multiselect('Department:',
                                        department,
                                        default=department)

        elif df[f2].dtypes == 'int64':
                ages = df[f2].unique().tolist()
                age_selection = st.slider('Filter 2:',
                                        min_value= min(ages),
                                        max_value= max(ages),
                                        value=(min(ages),max(ages)))
                
        # --- FILTER DATAFRAME BASED ON SELECTION
        mask = (df[f1].between(*age_selection)) & (df[f2].isin(department_selection))
        number_of_result = df[mask].shape[0]
        st.markdown(f'*Available Results: {number_of_result}*')

        

        # --- GROUP DATAFRAME AFTER SELECTION
        df_grouped = df[mask].groupby(by=['Rating']).count()[['Age']]
        df_grouped = df_grouped.rename(columns={'Age': 'Votes'})
        df_grouped = df_grouped.reset_index()

        # --- PLOT BAR CHART
        bar_chart = px.bar(df_grouped,
                        x='Rating',
                        y='Votes',
                        text='Votes',
                        color_discrete_sequence = ['#F63366']*len(df_grouped),
                        template= 'plotly_white')


        st.plotly_chart(bar_chart)


# --- PLOT PIE CHART
if chart_type == 'Pie Chart':

    filter = st.selectbox('Select Filter', options=tuple(temp))

    pie_chart = px.pie(df,
            title='Total',
            values='Rating',
            names='Department')

    st.plotly_chart(pie_chart)



# # --- STREAMLIT SELECTION
# department = df['Department'].unique().tolist()
# ages = df['Age'].unique().tolist()
# if chart_type == 'Bar Graph':
#         age_selection = st.slider('Age:',
#                                 min_value= min(ages),
#                                 max_value= max(ages),
#                                 value=(min(ages),max(ages)))

#         department_selection = st.multiselect('Department:',
#                                         department,
#                                         default=department)

#         # --- FILTER DATAFRAME BASED ON SELECTION
#         mask = (df['Age'].between(*age_selection)) & (df['Department'].isin(department_selection))
#         number_of_result = df[mask].shape[0]
#         st.markdown(f'*Available Results: {number_of_result}*')

#         # --- GROUP DATAFRAME AFTER SELECTION
#         df_grouped = df[mask].groupby(by=['Rating']).count()[['Age']]
#         df_grouped = df_grouped.rename(columns={'Age': 'Votes'})
#         df_grouped = df_grouped.reset_index()

#         # --- PLOT BAR CHART
#         bar_chart = px.bar(df_grouped,
#                         x='Rating',
#                         y='Votes',
#                         text='Votes',
#                         color_discrete_sequence = ['#F63366']*len(df_grouped),
#                         template= 'plotly_white')


#         st.plotly_chart(bar_chart)


# # --- PLOT PIE CHART
# pie_chart = px.pie(df_participants,
#                 title='Total No. of Participants',
#                 values='Participants',
#                 names='Departments')
# if chart_type == 'Pie Chart':
#         st.plotly_chart(pie_chart)


# # --- PLOT HISTOGRAM
# basic_histogram = px.histogram(data_frame=df, x='Department')

# st.plotly_chart(basic_histogram)

# --- DISPLAY IMAGE & DATAFRAME
col1, col2 = st.columns(2)
image = Image.open('images/survey.jpg')
print(image)
col1.image(image,
        caption='BE_PROJECT_GROUP_13',
        use_column_width=True)
col2.dataframe((df[mask]))
